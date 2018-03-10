#include <stdio.h>
#include <stdlib.h>
#define P 10000
int main(){
	int i, j, k, temp;
	FILE *fp, *ofp;
	fp = fopen("primes.txt", "r");
	ofp = fopen("primes2.txt", "w");
    unsigned long long prime, M = 2000000, mango;

    for(i=1; i<1001; i++)
    {
    	 int *primes;
    	 primes = (int *) malloc (P * sizeof(int));
    	 for(j=0; j<P; j++)
    	 {
    	 primes[j] = 1;
    	 }
    	 fseek(fp, 0, SEEK_SET);
    	 while(fscanf(fp, "%llu", &prime) != EOF)
    	 {
    		 k=0;
    		 while((prime*prime)+(k*prime) < M + (i*P))
    		 {
    			if((prime*prime)+(k*prime) >= M + ((i-1)*P))
    			{
    				temp = (int) (((prime*prime)+(k*prime))-(M+((i-1)*P)));
    				primes[temp] = 0;
    			}
    			k++;
    		 }
    	 }
    	 for(j=0; j<P; j++)
    	 {
    		 if(primes[j] == 1)
    		 {
    			 mango = (unsigned long long) j;
    			 mango += M+((i-1)*P);
    			 fprintf(ofp, "%llu\n", mango);
    		 }
    	 }
      free(primes);
    }
fclose(fp);
fclose(ofp);
}
