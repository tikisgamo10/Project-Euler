#include <stdio.h>
#include <stdlib.h>
int main(){
	unsigned long long array[20], num = 100000000000000000;
	int i, j, sum = 0;
	array[0] = 1;
	for(i=1; i<20; i++)
	{
		array[i] = 0;
	}
	for(i=1; i<= 1000; i++)
	{
		for(j=0; j<20; j++)
		{
		array[j] *= 2;
		}
		for(j=0; j<19; j++)
		{
			if(array[j]/num != 0)
			{
				array[j] -= num;
				array[j+1] += 1;
			}
		}
	}
	for(j=0; j<20; j++)
	{

	for(i=0; i<20; i++)
	{
		sum += (array[j]%10);
		array[j] = array[j] / 10;
	}
	}
	printf("%d\n", sum);
}
