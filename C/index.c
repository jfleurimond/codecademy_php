#include <stdio.h>


int randomfunction (x,y){
	
	int value = x * y; 
	return printf("This is me printing the value is %i via a function \n", value); 
}
	
int main(int argc, char *argv[]) {
	
	 
	
	int array[] = {2,5,6,11,78,34,22,121,66,34}; 
	
	printf("Printing array of index 1 %i \n", array[1]);
	
	printf("Below I will print all the items in the array \n"); 
	
	
// printf("The contents of the array is %i \n", array[i]); 
	
	
	 
	
	int i; 
		
		for (i=0;  i<10;  i++) {
			printf("The contents of the array is %i\n", array[i]);
			
		}
		
		
	
	
	randomfunction(5,6); 
	

	// printf("This is me printing the function %i \n", z); 
		
		
	return 0;  
	
}