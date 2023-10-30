/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package voting;

/**
 *
 * @author SPY
 */
public class Voting {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        start Start=new start();
        Start.setVisible(true);
        home Home= new home();
        help Help=new help();
        try{
            for(int i=0;i<=100;i++){
                Thread.sleep(40);
                Start.lodingnum.setText(Integer.toString(i)+"%");
                Start.lodingbar.setValue(i);
                if(i==100){
                    Start.setVisible(false);
                    Home.setVisible(true);
                }
           }
        }catch(Exception e){
          }
    }     
}
