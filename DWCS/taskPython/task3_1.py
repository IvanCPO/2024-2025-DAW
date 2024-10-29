words = ["List", "Directory", "Array"]

definitions =["Ordered array of objects", "Unordered array of key-value pairs", "mathematic definition"]

cooldictionary = {}

for num in range(0,definitions.__len__()):
    cooldictionary[words[num]] = definitions[num]
print("The contents of the dictionary are:")
for d in cooldictionary:
    print("\n"+d+": "+cooldictionary[d])