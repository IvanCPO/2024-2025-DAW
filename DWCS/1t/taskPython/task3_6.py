# FUNCTION calculator

class Calculator:
    numberOfObjects=0
    
    # def __init__(self):
    #     self.num1 = None
    #     self.num2 = None
    #     Calculator.numberOfObjects+=1
    
    def __init__(self, num1 = 4, num2 = 2):
        
        if type(num1)==int and type(num2)==int:
            self.num1 = num1
            self.num2 = num2
            Calculator.numberOfObjects+=1
        else:
            raise Exception ("To create this object, you need introduce numbers")
    
    
    def __str__(self):
        return f"[Calculator number {Calculator.numberOfObjects}.] - number1= {self.num1} - number2= {self.num2}"
    
    def suma(self):
        return self.num1 + self.num2


firstCalcule = Calculator()
firstCalcule.num1 = 5
firstCalcule.num2 = 33
print(f"Fist Calculator: {firstCalcule.num1} {firstCalcule.num2}")

secondCalcule = Calculator(43,33)
print (secondCalcule)
print (f"Suma = {secondCalcule.suma()}")