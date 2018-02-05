#include <stdio.h>

void trim(long* num, int* array, int* ct);
void flip(long* num);
int main()
{
	FILE *fp, *ofp;
	fp = fopen("thousandDigitNumber.txt", "r");
	ofp = fopen("Euler8Output.txt", "w");
	int counter = 0, i, j;
	int array[1001], *ct = &counter;
	long npt, product = 1, temp = 0, *input = &npt;
	if (fp == NULL)
	{
		printf("file couldn't be opened\n");
	}
	while(fscanf(fp, "%li", &npt) != EOF)
	{
                flip(input);
		trim(input, array, ct);
	}
	for(i=0; i<=987; i++)
	{
		for(j=i; j<= i+12; j++)
		{
			product = product * array[j];
		}
		if(product > temp)
		{
			temp = product;
		}
		product=1;
	}
	fprintf(ofp, "This is the output for program Euler8.c\n\n");
	fprintf(ofp, "The greatest product is: %li\n\n", temp);
	fprintf(ofp, "The 1000-digit number was:\n");
        for(i=0; i<=19; i++)
	{
		for(j=0; j<=49; j++)
		{
			fprintf(ofp,"%d ", array[(i*50)+j]);
		}
		fprintf(ofp, "\n");
	}
	fclose(fp);
	fclose(ofp);
}
void trim(long* num, int* array, int* ct)
{
	while((*num/10) >= 1)
		{
			array[*ct] = *num % 10;
			*num = *num/10;
			(*ct)++;
		}
		array[*ct] = *num;
		(*ct)++;
}

void flip(long* num)
{
	long pal = 0;
	while(*num/10 >= 1)
	     {
	     pal = pal * 10;
	     pal += *num % 10;
	     *num = *num/10;
	     }
	pal = pal * 10;
	pal += *num;
	*num = pal;

}
