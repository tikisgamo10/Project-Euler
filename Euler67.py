import time

# returns the greatest path sum and the new grid using dynamic programming
def dynamic_prog (grid):
    num_rows = len(grid)
    return dynamic_prog_helper(grid, num_rows - 2)

def dynamic_prog_helper(grid, i):
    if(i >= 0):

        for j in range(i+1):
            sum_1 = int(grid[i+1][j])
            sum_2 = int(grid[i+1][j+1])
            if(sum_1 > sum_2):
                grid[i][j] = sum_1 + int(grid[i][j])
            else:
                grid[i][j] = sum_2 + int(grid[i][j])

        return dynamic_prog_helper(grid, i-1)

    else:
        return grid[0][0]



# reads the file and returns a 2-D list that represents the triangle
def read_file ():

    triangle_2d_list = []
    triangle_file_input = open('Euler67-resource.txt', 'r')

    num_rows = int(triangle_file_input.readline().strip())

    for i in range(num_rows):

        #Read next line as a list
        triangle_1d_list = triangle_file_input.readline().strip().split(" ")

        #Append row to 2d list
        triangle_2d_list.append(triangle_1d_list)

    return triangle_2d_list

def main ():
    # read triangular grid from file
    grid = read_file()

    ti = time.time()
    dynamic_programmin_sum = dynamic_prog(grid)
    print ("Greatest path sum:", dynamic_programmin_sum)
    tf = time.time()
    del_t = tf - ti
    print("Time taken:", del_t, "seconds.")


main()
