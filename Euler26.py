# If q is rational we may write it as an irreducible fraction a/b where a,b ∈ ℤ. Consider the Euclidean division of a by b:
# At each step, there are only finitely many possible remainders r(0≤r<b).
# Hence, at some point, we must hit a remainder which has previously appeared in the algorithm:
# the decimals cycle from there i.e. we have a repeating pattern
import time

def get_cycle_length(num):
    remainders = []
    remainders.append(1)
    magnitude_of_ten = 1
    while(not last_entry_is_duplicate(remainders)):
        remainders.append((10 ** magnitude_of_ten) % num)
        magnitude_of_ten = magnitude_of_ten + 1

    last_remainder = remainders.pop()
    if(last_remainder == 0):
        return 0
    else:
        index_start_cycle = remainders.index(last_remainder)
        return len(remainders) - index_start_cycle

def last_entry_is_duplicate(lst):
    if(lst.count(lst[-1]) > 1):
        return True

    return False

def main():
    max_cycle = 0
    max_cycle_index = 1
    ti = time.time()
    for i in range(1, 1000):
        if(get_cycle_length(i) > max_cycle):
            max_cycle = get_cycle_length(i)
            max_cycle_index = i

    print("Max cycle is produced with d =", max_cycle_index, "and has cycle length of", max_cycle)
    del_t = time.time() - ti
    print("Time taken:", del_t, "seconds.")

main()
