#include <stdio.h>
#include <stdlib.h>
#define P 10000
int main(){
	int p = 3, i, temp, *primes, j, k, sec;
	unsigned long long N = 1000000;
	FILE *fp;
	fp = fopen("primes.txt", "r+");
	if(fp == NULL)
	{
		printf("Problem opening file\n");
		exit(1);
	}
	primes = (int *) malloc(N * sizeof(int));
	for(i=0; i<N; i++)
			        {
			        primes[i] = 1;
			        }
			        primes[0] = 0;

    while(p*p < (2*N))
	{
     i=0;
    while((p*p) + (i*2*p) < (2*N))
    {
	temp = p*p + (i*2*p);
	primes[(temp-1)/2] = 0;
    i++;
    }
	i=1;
    while(primes[((p-1)/2)+i] == 0)
	{
	i++;
	}
	temp = ((p-1)/2)+i;
	p = 2*temp + 1;
	}
    i=2;
    fprintf(fp,"%d\n", i);
    for(i=1;i<N; i++)
    {
    	if(primes[i] == 1)
    	{
    		fprintf(fp,"%d\n", (2*i)+1);
    	}
    }
    free(primes);
    fclose(fp);
}
