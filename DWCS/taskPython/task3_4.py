# FUNCTION Factorial

def factorial(number): 
    
    if type(number)==int and number>=0:
        resul = 1
        for i in range(1,number+1):
            resul = resul * i
    else:
        raise Exception ("You need introduce an integer")
    
    return resul

try:
    print(factorial(0))
    factorial(2.4)
except Exception as error:
    print (error)