# FUNCTION POWERS

def potencia(base, power): 
    
    # if not isinstance(base, int) or not isinstance(power,int):
    #     raise TypeError("You need introduces integers")
    if type(base) != int or type(power) != int:
        raise Exception ("Blalblalbal")
    else:
        produto = 1
        for numeber in range(power):
            produto*=base
        
    return produto

try:
    print(potencia(4,5))
    potencia(4,2.4)
except Exception as error:
    print (error)