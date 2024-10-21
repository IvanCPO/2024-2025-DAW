words = ["List", "Directory", "Array"]

definitions =["Ordered array of objects", "Unordered array of key-value pairs", "mathematic definition"]

diction = {}

for num in range(0,definitions.__len__()):
    diction[words[num]] = definitions[num]

for d in diction:
    print(d+": "+diction[d])