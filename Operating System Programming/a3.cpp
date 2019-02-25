#include <iostream>
#include <cstdlib>
#include <pthread.h> //for multithread programmings.
#include <inttypes.h> //for intptr_t data type -  allow for proper memory allocation from void to int pointer types, should avoid most 
//[precision] errors on various operating systems.
using namespace std;
void *threadLoops(void *j) {
	cout << "Start of thread \n";
		int n = (intptr_t)j;   //loop
		for(int i=n;i<n+10;i++){
		cout << i << " ";
		}
		
	cout << "\nEnd of thread \n"; 
}
int main(){
	pthread_t threads[4];
	intptr_t i; 	
		for(i = 0; i < 4; i++){ //create threads
			pthread_create(&threads[i], NULL, threadLoops, (void *)(i*10)); //handle loops via thread
		}
		
	pthread_exit(NULL);
	return 0;
}
