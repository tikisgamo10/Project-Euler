f_1 = 1
f_2 = 1
index = 2

def getNextFibonacci():
    global f_1
    global f_2
    temp = f_2
    f_2 = f_1 + f_2
    f_1 = temp

while(f_2 < 10 ** 999):
    getNextFibonacci()
    index += 1

print("The first fibonacci with 1000 digits has index ", index)
