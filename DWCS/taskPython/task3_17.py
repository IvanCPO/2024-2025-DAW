class DivisionByZeroError (Exception):
    def __init__(self, message):
        super().__init__(message)

def divide_numbers(numerator, denominator):
    try:
        if denominator==0:
            raise DivisionByZeroError("Cannot divide by zero.")
        else:
            return numerator/denominator
    except DivisionByZeroError as e:
        print(e)

print(divide_numbers(4,0))
