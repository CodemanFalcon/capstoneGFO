//This is the HEADER FILE salariedemployee.h. 
//This is the INTERFACE for the class SalariedEmployee. 
#ifndef SALARIEDEMPLOYEE_H 
#define SALARIEDMPLOYEE_H
#include <string> 
#include "employee.h"
using namespace std;
namespace kentemployees {
  class SalariedEmployee: public Employee {
    public: SalariedEmployee();
    SalariedEmployee(string new_name, string new_ssn, double new_weekly_salary);
    double get_salary();
    void change_salary(double new_salary);
    void print_check();
    void give_raise(double amount);
    private: double salary; //weekly
  };
}
#endif //SALARIEDEMPLOYEE_H
