
def make_spiral_square(side_length):
    #Assumes square is odd, else there is no unique center element
    n = side_length
    square = [[0 for i in range(n)] for j in range(n)]
    i = j = (n + 1)/2
    square[i][j] = 1
    dictionary = {'direction': 'right', 'i': i, 'j': j}

    #Need to append elements 2 thru n^2
    for k in range(2, n ** 2 + 1):
        dictionary = move(dictionary, n)
        square[dictionary['i']][dictionary['j']] = k

    return square



def move(dictionary, n):
    direction = dictionary['direction']
    i = dictionary['i']
    j = dictionary['j']
    if(direction == 'up'):
        if(i-1 >= 0):
            dictionary['i'] = i-1
        else:
            dictionary['direction'] = 'right'
            dictionary['j'] = j+1

        return direction


    if(direction == 'down'):
        if(i+1 < n):
            dictionary['i'] = i+1
        else:
            dictionary['direction'] = 'left'
            dictionary['j'] = j-1

        return direction


    if(direction == 'left'):
        if(j-1 >= 0):
            dictionary['j'] = j-1
        else:
            dictionary['direction'] = 'up'
            dictionary['i'] = i-1

        return direction


    if(direction == 'right'):
        if(j+1 < n):
            dictionary['j'] = j+1
        else:
            dictionary['direction'] = 'down'
            dictionary['i'] = i+1

        return direction


def main():

    square = make_spiral_square(1001)
    print(square)

main()
