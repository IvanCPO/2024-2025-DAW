class Car:
    
    descript = "Mono"
    def __init__(self):
        self.color=""
        self.name=""
    
    def __init__(self, color, name):
        self.color=color
        self.name=name
    
    def nameCar(self):
        return self.name
    
    def __str__(self):
        return (f"O coche {self.name} é de cor {self.color}.")
        

c1 = Car("vermello", "Rayo McQueen")

print(c1)
print(f"Cal é o seu nome?? O nome é {c1.nameCar()}")
    
    
    