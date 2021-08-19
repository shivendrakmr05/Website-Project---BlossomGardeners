Given the following class (i.e. Time), define a new class TimeOfDay that *inherits* from it and adds the following information: day of the month (int), month of the year (int), year(int). 

class Time {

public:

Time(int hh, int mm, int ss) : h(hh), m(mm), s(ss) {}

private

int h, m, s;

}

In your definition include the following prototypes but not the implementations (those are asked for later):

Reminder a definition of a class is what you usually include in the header file (i.e. .h, .hpp)

0.-Default constructor.

1.-Constructor that takes hour, minute, second, day of the month, month of the year, and year as parameters.

2.-getters functions: getDay(), getMonth(), getYear()

3.-setter functions: setDay(day), setMonth(month), setYear(year)

It is very important that you use const keyword properly in this class definition.


class Time {

public:

Time(int hh, int mm, int ss) : h(hh), m(mm), s(ss) {}

private

int h, m, s;

}




class 

class TimeOfDay: public Time
{
   private:
   
   int day:
   int month;
   int year;

   public:

   
   TimeOfDay() ;

   TimeOfDay(int h, int m, int s, int tday , int mmnt, int yyr );

   int getDay() const;
   int getMonth() const;
   int getYear() const;

   void setDay(int day);
   void setMonth(int month);
   void setYear(int year);

   ~TimeOfDay(){};
   
  
};


TimeOfDay :: TimeOfDay() : Time() {};

TimeOfDay :: TimeOfDay(int h,int m, int s, int tday , int mmonth, int yyear) : Time(h,m,s),day(tday),
month(mmonth),year(yyear){};






int TimeOfDay :: getDay( ){
	return(year);
};

int TimeOfDay :: getMonth( ){
	return(year);
};
int TimeOfDay :: getYear( ){
	return(year);
};








#include <iostream>
using std::cout;
using std::cin;

template <class T>
class myptr {
    
  public:
  	myptr(){
  		<T> * a;
  	}
    
};



int main () {
  mypair <int,float> myobject (100, 75.66);
  cout << myobject.getmax();
  return 0;
}



const myptr& myptr::operator->(const myptr& a) {
     
      return *this;
}


template<typename T>
void myptr<T>::myptr(T u)
{
    a=u;
}




MyArray(const MyArray& a){

	int s = a.size();
    


};



MyArray(const MyArray& other)
    : myArray(0)
    , _size(0)
{
   if(this != &other) {
      MyArray my_tmp_arr(other._size);
      std::copy(&other[0], &other[other._size], &my_tmp_a[0]);
      swap(my_tmp_a);
   }
}


#include<algorithm>

MyArray(const MyArray& a){

    int size= a.size; 
    
   for (int j = 0; j < length; j++)

}




MyArray::MyArray(const MyArray& src) {
    _size = src._size;
    _arr = new int[_size];

    for (int i = 0; i < _size; i++) {
        _arr[i] = src._arr[i];
    }
}




template <class elemType> arrayListType<elemType>::arrayListType
{
(const arrayListType<elemType>& otherList)
(const arrayListType<elemType>& otherList)
{
} //end copy constructor
Overloading the Assignment Operator

maxSize = otherList.maxSize;
length = otherList.length;
list = new elemType[maxSize]; //create the array
assert(list != NULL); //terminate if unable to allocate
                              //memory space
for (int j = 0; j < length; j++) //copy otherList list [j] = otherList.list[j];






bool operator >= (  const  std::string a,const char *b) 
{
    if (strcpy(a.c_str( ),b) >= 0)
           return true;
   else 
          return false;


}	


char * > std::string

std::string > char *

char * >= std::string

std::string >= char *

