def get_primes():
    primes_file_input = open('primes.txt', 'r')
    primes = []

    num_rows = int(primes_file_input.readline().strip())
    for i in range(num_rows):

        #Read next line as a list
        primes.append(int(primes_file_input.readline().strip()))
    return primes

def get_primes_under_thousand(primes):
    primes_under_thousand = []
    for p in primes:
        if(p > 1000):
            break

        primes_under_thousand.append(p)

    return primes_under_thousand


def get_possible_coefficients(primes):
    possible_coefficients = []
    primes_under_thousand = get_primes_under_thousand(primes)
    for b in primes_under_thousand:

        for a in range(-999, 1000):
            #When n = 1, the polynomial reduces to 1 + a + b
            #This gives a condition on a for it to be a possible coefficient
            print("Checking (a,b)=", a, b)
            if(1 + a + b in primes):
                possible_coefficients.append(tuple([a,b]))
                print("Finished checking")

    return possible_coefficients




def main():
    primes = get_primes()
    possible_coefficients = get_possible_coefficients(primes)
    print(possible_coefficients)
main()
