import os
import string
from flask import Flask, render_template, request
import PyPDF2
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.naive_bayes import MultinomialNB
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize
from nltk.stem import WordNetLemmatizer
import nltk

# Initialize Flask app
app = Flask(__name__, template_folder=os.path.join(os.getcwd(), 'templates') )

# Preprocessing function
def preprocess(text):
    # Lowercase
    text = text.lower()
    # Remove punctuation
    text = text.translate(str.maketrans('', '', string.punctuation))
    # Tokenize
    tokens = word_tokenize(text)
    # Lemmatize the words
    lemmatizer = WordNetLemmatizer()
    # Remove stop words
    stop_words = set(stopwords.words('english'))
    tokens = [lemmatizer.lemmatize(word) for word in tokens if word not in stop_words]
    return ' '.join(tokens)

# Function to extract text from PDF
def extract_text_from_pdf(file):
    try:
        reader = PyPDF2.PdfReader(file)
        text = ''
        for page in reader.pages:
            text += page.extract_text()
        return text
    except Exception as e:
        print(f"Error reading PDF: {e}")
        return ''

# Example categories and keywords
categories = {
    "Mathematics": ["math", "mathematics", "geometry", "algebra", "calculus", "trigonometry", "arithmetic", "equation", "statistics", "probability", "linear"],
    "Programming": ["programming", "code", "python", "java", "javascript", "developer", "software", "algorithms", "debug", "object-oriented"],
    "Education": ["education", "learning", "teaching", "school", "university", "students", "classroom", "homework", "curriculum", "teaching"],
    "Sports": ["sports", "game", "football", "basketball", "soccer", "tournament", "team", "athlete", "competition", "Olympics", "exercise"]
}

# Function to classify document based on keywords
def classify_document(document):
    for category, keywords in categories.items():
        for keyword in keywords:
            if keyword in document:
                return category
    return "Unknown"  # If no keywords match

# Create labels based on keywords for each training document
y_train = [
    "Mathematics", "Programming", "Education", "Sports", 
    "Mathematics", "Programming", "Education", "Sports", 
    "Mathematics", "Sports"
]
# Example for simplicity

# Preprocess training documents (just a few example sentences)
training_documents = [
    "Calculus is a branch of mathematics, focusing on limits and integrals.",
    "Python is a versatile programming language used for web development and data science.",
    "Education is crucial for the development of individuals and society, from elementary to higher education.",
    "Football is a team sport played between two teams of eleven players each.",
    "Algebra and geometry are fundamental branches of mathematics that deal with equations and shapes.",
    "Java and Python are two of the most popular programming languages used in software development.",
    "Learning how to code is a valuable skill in today's tech-driven world.",
    "In sports like soccer, teamwork and strategy are key to winning games.",
    "Mathematics helps us understand the world and solve complex problems.",
    "Exercise and physical activity are important for maintaining good health, and sports play a vital role."
]
training_documents = [preprocess(doc) for doc in training_documents]

# Convert text to numerical features using TF-IDF
vectorizer = TfidfVectorizer()
X_train = vectorizer.fit_transform(training_documents)

# Train a Naive Bayes classifier
classifier = MultinomialNB()
classifier.fit(X_train, y_train)

# Home route
@app.route('/', methods=['GET', 'POST'])
def home():
    if request.method == 'POST':
        # Get the uploaded file
        file = request.files['file-upload']
        if file and file.filename.endswith('.pdf'):
            # Extract text and preprocess
            text = extract_text_from_pdf(file)
            processed_text = preprocess(text)
            
            # Predict category and confidence
            X_test = vectorizer.transform([processed_text])
            predicted_category = classifier.predict(X_test)[0]
            predicted_probabilities = classifier.predict_proba(X_test)[0]
            category_index = list(categories.keys()).index(predicted_category)
            confidence = predicted_probabilities[category_index] * 100

            # Round the confidence to 2 decimal places
            rounded_confidence = round(confidence, 2)

            return render_template('index.html', category=predicted_category, confidence=rounded_confidence)

    return render_template('index.html', category=None, confidence=None)

if __name__ == '__main__':
    app.run(debug=True)
