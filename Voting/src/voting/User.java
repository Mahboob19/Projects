/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package voting;

/**
 *
 * @author Niraj
 */
class User {

   private String name,fname,gender,address,state,dob,addharno;
    int age;
    
    public User (String name,String fname,String gender,int age,String address,String state,String dob,String addharno)
            {
            this.name=name;
            this.fname=fname;
            this.gender=gender;
             this.age=age; 
             this.state=state;
             this.addharno=addharno;
             this.address=address;  
            this.dob=dob;
           
            
            }
    public String getname()
    {
    return name;}
    public String getfname()
    {
    return fname;
    }
    public String getgender()
    {
    return gender;}
    public int getage()
    {
    return age;
    }
     public String getaddress()
    {
        return address;
    }
    public String getstate()
    {
    return state;
    }
     public String getaddharno()
    {
    return addharno;}
    public String getdob()
    {
    return dob;
    
    }

    
    
}
