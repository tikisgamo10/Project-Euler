#include <stdio.h>
#include <stdlib.h>
int main(){
	FILE *ifp, *ofp;
	ifp = fopen("grid.txt", "r");
	ofp = fopen("OutputEuler11.txt", "w");
	int  i = 0, j = 0;
	long product = 0, temp, read, grid[20][20];
	if(ifp == NULL)
	{
	printf("Couldn't open file grid.txt ");
	exit(1);
	}
	if(ofp == NULL)
		{
		printf("Couldn't create output file\n");
		exit(1);
		}

	while(fscanf(ifp,"%lu ", &read) != EOF)
	{
		grid[i][j] = read;
		if(j == 19)
		{
			j = 0;
			i++;
		}else{
			j++;
		}
	}
	fprintf(ofp, "The grid is:\n");
	for(i=0; i<20; i++)
	{
		for(j=0; j<20; j++)
		{
			fprintf(ofp, "%02lu ", grid[i][j]);
		}
		fprintf(ofp,"\n");
	}
	i = 0, j = 0;
	while(i<17)
	{
		temp = grid[i][j] * grid[i+1][j] * grid[i+2][j] * grid[i+3][j];
		if(temp > product)
		{
			product = temp;
		}
		j++;
		if(j == 20)
		{
			j = 0;
			i++;
		}
	}
	i = 0, j = 0;
	while(j<17)
	{
		temp = grid[i][j] * grid[i][j+1] * grid[i][j+2] * grid[i][j+3];
		if(temp > product)
		{
			product = temp;
		}
		i++;
		if(i == 20)
		{
			i = 0;
			j++;
		}
	}
	i = 0, j = 0;
	while(i<17)
	{
		temp = grid[i][j] * grid[i+1][j+1] * grid[i+2][j+2] * grid[i+3][j+3];
		if(temp > product)
		{
			product = temp;
		}
		j++;
		if(j == 17)
		{
			j = 0;
			i++;
		}
	}
	i = 0; j = 3;
	while(i<17)
		{
			temp = grid[i][j] * grid[i+1][j-1] * grid[i+2][j-2] * grid[i+3][j-3];
			if(temp > product)
			{
				product = temp;
			}
			j++;
			if(j == 20)
			{
				j = 3;
				i++;
			}
		}
	fprintf(ofp,"\nThe largest product of four adjacent numbers is:\n%lu", product);


	fclose(ifp);
	fclose(ofp);
}
