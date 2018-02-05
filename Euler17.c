#include <stdio.h>
int main(){
	long sum = 11;
	int i, temp, tempo, temporal;
	for(i=1; i<1000; i++)
	{
		if(i>=100)
		{
			temp = i/100;
			if(temp == 1 || temp == 2 || temp == 6)
			{
						sum += 10;
			}else if(temp == 4 || temp == 5 || temp == 9)
			{
						sum += 11;
			}else if(temp == 3 || temp == 7 || temp == 8)
			{
						sum += 12;
			}
			temp = i % 100;
			if(temp != 0)
			{
				sum += 3;
			}
		}else{
			temp = i;
		}
		tempo = temp / 10;
		temporal = temp % 10;
		if(tempo == 1)
		{
			if( temporal == 0)
			{
			sum += 3;
			}else if(temporal == 7)
			{
			sum += 9;
			}else if(temporal == 1 || temporal == 2)
			{
			sum += 6;
			}else if(temporal == 5 || temporal == 6)
			{
			sum += 7;
			}else{
			sum +=8;
			}
		}else{
			if(tempo == 2 || tempo == 3 || tempo == 8 || tempo == 9)
					{
						sum += 6;
					}else if(tempo == 4 || tempo == 5 || tempo == 6)
					{
						sum += 5;
					}else if(tempo == 7)
					{
						sum += 7;
					}else{

					}
			if(temporal == 1 || temporal == 2 || temporal == 6)
			{
				sum += 3;
			}else if(temporal == 4 || temporal == 5 || temporal == 9)
			{
				sum += 4;
			}else if(temporal == 3 || temporal == 7 || temporal == 8)
			{
				sum += 5;
			}else{

			}
		}


	}
	printf("%li\n", sum);
}
