from typing import List

class Person:
    def __init__(self, name, email, telephone):
        self.name = name
        self.email = email
        self.telephone = telephone
    
    def __str__(self):
        return f"{self.name} --- {self.telephone}"

class Product:
    def __init__(self, name, description, price, image):
        self.name = name
        self.description = description
        self.price = price
        self.image = image
    
    def __str__(self):
        return f"{self.name} --- {self.price}€\n"

class Order:
    def __init__(self, date, products: List[Product], client: Person):
        self.date = date
        self.products = products
        self.client = client
    
    def getTotal(self):
        priceTotal= 0.00
        for product in self.products:
            priceTotal+= 1.00*product.price
        return priceTotal

    def __str__(self):
        products = ""
        for product in self.products:
            products+=product.__str__()
        return f"Date [{self.date}] --- {self.client}\n-----------------------------\nProducts:\n{products}\nTotal____{self.getTotal()}€"
    
order = Order("29-11-2024",[Product("laranja","Fruta refrescante",2.20, None),Product("arroz","Perfecto para convinar en todos los platos",3.50, None)],Person("Iván Cabaleiro Poceiro","a22ivancp@iessanclemente.net","625661641"))
print(order)