from typing import List

class BookNotAvailableException (Exception) :
    def __init__(self, message = "This book is not avaliable"):
        super().__init__(message)

class BookNotFoundException (Exception) :
    def __init__(self, message = "This book is not found"):
        super().__init__(message)


class Book:
    def __init__(self, title:str, author:str, status:bool):
        self.title = title
        self.author = author
        self.status = status
    
    def __str__(self):
        return f"{self.title} ({self.author}) --- Is available? {self.status}"
    
class Library:
    def __init__(self, listBook:List[Book]):
        self.listBook = listBook
    
    def add_book(self, book):
        self.listBook.append(book)
    
    def getAvaliables(self):
        return list (filter( lambda book: book.status, self.listBook))
    
    def borrowBook(self, title):
        try:
            book= self.findBook(title)
            if book.status:
                book.status = False
            else:
                raise BookNotAvailableException()
        except BookNotAvailableException as e:
            print(e)
    
    def findBook(self, title):
        try:
            value = None
            for book in self.listBook:
                if book.title == title:
                    value = book
                    break
            if value==None: raise BookNotFoundException()
            return value
        except BookNotFoundException as e:
            print (e)
            

# Crear algunos libros
book1 = Book("The Catcher in the Rye", "J.D. Salinger", True)
book2 = Book("To Kill a Mockingbird", "Harper Lee", False)
book3 = Book("1984", "George Orwell", True)

# Crear una biblioteca con los libros
library = Library([book1, book2, book3])

# Probar mostrar todos los libros
print("All books in the library:")
for book in library.listBook:
    print(book)

# Probar obtener libros disponibles
print("\nAvailable books:")
for book in library.getAvaliables():
    print(book)

# Probar buscar un libro existente
print("\nFinding a book:")
try:
    book = library.findBook("1984")
    print(f"Found: {book}")
except Exception as e:
    print(e)

# Probar buscar un libro inexistente
print("\nFinding a non-existent book:")
try:
    book = library.findBook("Invisible Man")
    print(f"Found: {book}")
except Exception as e:
    print(e)

# Probar pedir prestado un libro disponible
print("\nBorrowing an available book:")
library.borrowBook("1984")
print(f"After borrowing, 1984: {book1}")

# Probar pedir prestado un libro no disponible
print("\nBorrowing a book that is not available:")
library.borrowBook("To Kill a Mockingbird")

# Probar pedir prestado un libro inexistente
print("\nBorrowing a non-existent book:")
try:
    library.borrowBook("Invisible Man")
except Exception as e:
    print(e)

# Verificar libros disponibles después de los cambios
print("\nAvailable books after borrowing:")
for book in library.getAvaliables():
    print(book)