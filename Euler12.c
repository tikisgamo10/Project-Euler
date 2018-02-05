#include <stdio.h>
#include <stdlib.h>
#include <math.h>
void foundIt(unsigned long triangular)
{
	printf("The first triangular number with over 500 distinct divisors is:");
	printf("\n%lu\n", triangular);
	exit(0);
}
void factor(unsigned long triangular)
{

}
int main(){
	int i=8, counter = 0;
	unsigned long triangular = 28, boo = 1, root1, j;
	double root;
	while (boo != 0)
	{
		triangular += i;
		i++;
		root = sqrt(triangular);
		root1 = (unsigned long) root;
		j=1;
		counter = 0;
		while(j < root1)
		{
			if(triangular%j == 0)
			{
				counter += 1;
				if(counter == 251)
				{
					foundIt(triangular);
				}
			}
			j++;
		}
		if(j*j == triangular)
		{
			counter += 1;
			if(counter == 250)
			{
				foundIt(triangular);
			}
		}
		boo++;
		if(boo == 100000)
		{
			printf("One hundred thousand iterations\n");
			boo = 1;
		}
		counter = 0;
	}
}
