#include <stdio.h>
#include <stdlib.h>
int collatz(unsigned long long num, unsigned long long* array);
int main(){
	int i, temp, max = 0, j, maxN;
	unsigned long long tempo[5000], maxi[5000];
	FILE *fp;
	fp = fopen("Longest Collatz.txt", "w");
	for(i=13; i <= 1000000; i++)
	{
		while(j < max)
		{
			if(i == maxi[j])
			{
			i++;
			j=-1;
			}
			j++;
		}

		temp = collatz(i, tempo);
		if(temp > max)
		{
			max = temp;
			maxN = i;
			for(j=0; j < temp; j++)
			{
				maxi[j] = tempo[j];
			}
		}
	}
	fprintf(fp, "Number under 1M which produces longest Collatz sequence: %d", maxN);
      fprintf(fp,"\n");
    for(i = 0; i < max; i++)
    {
    	fprintf(fp,"%13llu ", maxi[i]);
    	if(i%10 == 0 && i != 0){
    		fprintf(fp, "\n");
    	}
    }

}
int collatz(unsigned long long num, unsigned long long* array){
	int counter = 0, mod = num%2;
	while (num != 1)
	{
		switch(mod){
		case 0 :
			array[counter] = num;
			num = num / 2;
			mod = num%2;
			counter++;
			break;
		case 1 :
			array[counter] = num;
			num = 3*num + 1;
			mod = num%2;
			counter++;
			break;
		}
	}
	return counter;
}

