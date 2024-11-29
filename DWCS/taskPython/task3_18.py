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
    
    def getAvaliables(self):
        return filter( lambda book: book.status, self.listBook)
    
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