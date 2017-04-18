<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pricing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    
    
    
                          
<?php 
        if(isset($_GET['companyName'])){
        $companyName=$_GET['companyName'];
        }
         if(isset($_GET['customerName'])){
        $customerName=$_GET['customerName'];
         }
          if(isset($_GET['address'])){
        $address=$_GET['address'];
          }
         if(isset($_GET['description'])){
        $description=$_GET['description'];
        }
         if(isset($_GET['usablecapacity'])){
        $usablecapacity=$_GET['usablecapacity'];
         }
          if(isset($_GET['controllers'])){
        $controllers=$_GET['controllers'];
          }
        
     if(isset($_GET['jbods'])){
        $jbods=$_GET['jbods'];
        }
         if(isset($_GET['datadisks'])){
        $datadisks=$_GET['datadisks'];
         }
          if(isset($_GET['sascables'])){
        $sascables=$_GET['sascables'];
          }
    
       
     if(isset($_GET['zil'])){
        $zil=$_GET['zil'];
        }
         if(isset($_GET['readcache'])){
        $readcache=$_GET['readcache'];
         }
          if(isset($_GET['metacache'])){
        $metacache=$_GET['metacache'];
          }
    
    if(isset($_GET['tier'])){
        $tier=$_GET['tier'];
          }
    
        
        ?>
        
        
    
    
    
    
    <script>
    
    
    //raid type and #data disks, 3parity disks and # total disks
    var raids={ "raid" : [
              { "raidType": "Raidz1-SingleParity(4+1) Typical SAS" ,
                "DataDisks": 4,
                "ParityDisks": 1,
                "TotalDisks": 5},
              { "raidType": "Raidz1-SingleParity(8+1) Typical SSD" ,
                "DataDisks": 8,
                "ParityDisks": 1,
                "TotalDisks": 9}
              ,
               {"raidType": "Raidz2-DoubleParity(8+2) Typical NLSAS" ,
                "DataDisks": 8,
                "ParityDisks": 2,
                "TotalDisks": 10}
             
            
               ]
               
            
        };


        
       // diskType and their paramters
    
    var disks= {
            "disk": [
                    {"diskType":"NLSAS",
                    "size": 4,
                    "iops": 75,
                    "usableSize": 2.6784,
                    "formFactor":3.5,
                    "rpm": 7200,
                    "zilGroupsRequired": 1,
                    "ReadCacheRequired": 0,
                    "MetaCacheRequired": 0,
                     "RaidType": "Raidz2-DoubleParity(8+2) Typical NLSAS",
                     "JBODType": 90,
                     "maxNumberofDisksPerCluster": 360,
                     "priceOfController": 10350,
                     "priceOfJBOD": 6000,
                     "priceOfDisk": 375,
                     "pricePerTB": 79,
                     "powerPerController": 2500,
                     "powerJBOD": 2500,
                     "rackController": 2,
                     "rackJBOD": 4
                    },

                    
                    
                    {"diskType":"SAS10K",
                    "size": 1.2,
                    "iops": 140,
                    "usableSize": 0.80352,
                    "formFactor":2.5,
                    "rpm": 10000,
                    "zilGroupsRequired": 1,
                    "ReadCacheRequired": 1,
                    "MetaCacheRequired": 1,
                     "RaidType": "Raidz1-SingleParity(4+1) Typical SAS",
                     "JBODType": 72,
                     "maxNumberofDisksPerCluster": 288,
                     "priceOfController": 10350,
                     "priceOfJBOD": 6000,
                     "priceOfDisk": 386,
                     "pricePerTB": 399,
                     "powerPerController": 2500,
                     "powerJBOD": 2500,
                     "rackController": 2,
                     "rackJBOD": 4
                    },

                  

                    {"diskType":"SAS15K",
                    "size": 0.6,
                    "iops": 175,
                    "usableSize": 0.40176,
                    "formFactor":2.5,
                    "rpm": 15000,
                    "zilGroupsRequired": 1,
                    "ReadCacheRequired": 1,
                    "MetaCacheRequired": 1,
                     "RaidType": "Raidz1-SingleParity(4+1) Typical SAS",
                     "JBODType": 72,
                     "maxNumberofDisksPerCluster": 288,
                     "priceOfController": 10350,
                     "priceOfJBOD": 6000,
                     "priceOfDisk": 386,
                     "pricePerTB": 449,
                     "powerPerController": 2500,
                     "powerJBOD": 2500,
                     "rackController": 2,
                     "rackJBOD": 4
                    },

                     {"diskType":"SSDHighCapacity",
                    "size": 4,
                    "iops": 5000,
                    "usableSize": 2.6784,
                    "formFactor":2.5,
                     "zilGroupsRequired": 0,
                    "ReadCacheRequired": 0,
                    "MetaCacheRequired": 0,
                     "RaidType": "Raidz1-SingleParity(8+1) Typical SSD",
                     "JBODType": 24,
                     "maxNumberofDisksPerCluster": 96,
                     "priceOfController": 10350,
                     "priceOfJBOD": 2200,
                     "priceOfDisk": 3600,
                     "pricePerTB": 799,
                     "powerPerController": 2500,
                     "powerJBOD": 1900,
                     "rackController": 2,
                     "rackJBOD": 2
                     },
                
                {"diskType":"SSDHighPerformance",
                    "size": 2,
                    "iops": 5000,
                    "usableSize": 1.3392,
                    "formFactor":2.5,
                     "zilGroupsRequired": 0,
                    "ReadCacheRequired": 0,
                    "MetaCacheRequired": 0,
                     "RaidType": "Raidz1-SingleParity(8+1) Typical SSD",
                     "JBODType": 24,
                     "maxNumberofDisksPerCluster": 96,
                     "priceOfController": 10350,
                     "priceOfJBOD": 2200,
                     "priceOfDisk": 1800,
                     "pricePerTB": 699,
                     "powerPerController": 2500,
                     "powerJBOD": 1900,
                     "rackController": 2,
                     "rackJBOD": 2
                     },
                
                  {"diskType":"WriteCache",
                    "size": 0.1,
                    "iops": 5000,
                    "usableSize": 0.06696,
                    "formFactor":2.5,
                    "priceOfDisk": 660,
                    
                     },
                {"diskType":"ReadCache",
                    "size": 0.8,
                    "iops": 5000,
                    "usableSize": 0.53568,
                    "formFactor":2.5,
                    "priceOfDisk": 720,
                    
                     },
                
                 {"diskType":"MetaCache",
                    "size": 2,
                    "iops": 5000,
                    "usableSize": 1.3392,
                    "formFactor":2.5,
                    "priceOfDisk": 1800,
                    
                     }     
            ]

    };
        
       


 // standard values
    
    var numberOfZilGroups=2;
    var numberOfCache= 0;
    var numberOfMetaGroups=1;
    var writePercentage=20;
    var cacheHitPercent=50;
    var averageBlockSize=4;

   /* quantity of each unit*/
    var numControllers, numJBODS, numDataDisks, zil, readCache, metaCache, sasCables;
    var totalCost3=0,totalCost5=0;
    var totalHWCost=0,totalSWCost=0,supportSW=0,supportHW=0,costPerGBPerMonth3=0,costPerGBPerMonth5=0;
        
        numControllers=<?php echo $controllers ?>;
        numJBODS=<?php echo $jbods ?>;
        numDataDisks=<?php echo $datadisks ?>;
        zil=<?php echo $zil ?>;
        readCache=<?php echo $readcache ?>;
        metaCache=<?php echo $metacache ?>;
        
    
        
    var customerName, customerContact, DeliveryAddress, description, usableCapcityTB, tier,numberOfSASCables;
       
    tier="<?php echo $tier ?>";
    usableCapcityTB=<?php echo $usablecapacity ?>;
    numberOfSASCables=<?php echo $sascables ?>;
    
   // alert(numControllers+numJBODS+numDataDisks+zil+readCache+metaCache+usableCapcityTB+numberOfSASCables);
        
      
          // unit prices 
            var costController, costJBODS, costDataDisks, costZil, costReadCache, costMetaCache, costSASCables,pricepertb;
            costSASCables=100;
        
        function calculatePrice(){
         
            
            for( var i in disks.disk){
               
                if(disks.disk[i].diskType==tier){
                    //alert(disks.disk[i].diskType);
                    costController=disks.disk[i].priceOfController;
                  
                    costJBODS=disks.disk[i].priceOfJBOD;
                    costDataDisks=disks.disk[i].priceOfDisk;
                    costZil=disks.disk[5].priceOfDisk;
                    costReadCache=disks.disk[6].priceOfDisk;
                    costMetaCache=disks.disk[7].priceOfDisk;
                    pricepertb=disks.disk[i].pricePerTB;
                      //alert(disks.disk[i].priceOfJBOD);
                    break;
                    
                }
                
            }
            
            totalHWCost=costController* numControllers+
                        costJBODS* numJBODS+
                        costDataDisks*numDataDisks+
                        costZil*zil+
                        costReadCache*readCache+
                        costMetaCache* metaCache+
                       costSASCables* numberOfSASCables;
            supportHW=0.15* totalHWCost;
            
            totalSWCost=usableCapcityTB* pricepertb;
            supportSW=0.15* totalSWCost;
            
            
            totalCost3=totalHWCost+ totalSWCost+ (totalSWCost*0.15)*2;
            totalCost5=totalHWCost+ (totalHWCost*0.15)*2+totalSWCost+ (totalSWCost*0.15)*4;
            
            costPerGBPerMonth3=totalCost3/(usableCapcityTB*1000*36);
            costPerGBPerMonth5=totalCost5/(usableCapcityTB*1000*60);
            //alert( costPerGBPerMonth5);
                  
            
        };
        
        
  
        
        calculatePrice();
    </script>
    





<div class="container-fluid">
  <h2>Console</h2>
  <p>UI for generating BOM(Billing of Materials) and Price Calcualtion based on Customer Inputs </p>

  <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#home">Input Section</a></li>
    <li  class="active"><a data-toggle="tab" href="#menu2">Output section</a></li>
    <li><a data-toggle="tab" href="#menu3">Formulae Sheet</a></li>
  </ul>

  <div class="tab-content">
   
      <div id="home" class="tab-pane fade">
     
           <h3>Input Section</h3>
      <p>Select</p>
                
          
    
    </div>


    <div id="menu2" class="tab-pane fade  in active">
        
        
     
        <div>
            <h1>Customer Info</h1>
      <p id="CustomerInfo"></p>
            </div>
      
         <p id="pricinglist"></p>
      <div id="otherinfo"></div>

      <div id="throughputs"></div>
      
        
      

<script>
document.getElementById("CustomerInfo").innerHTML = "<pre>Quote prepared By:         Ajesh Baby, Senior Product Manager<br>Cusomter:                   Wipro <br>Customer Contact:	    Suradeep Das <br>Delivery Address:	    Nxtra Data, White Field<br>Description:	          Storage 500TB Tier1 and Tier3, 950TB backup <br> Usable Capacity:              100<br>Tier:                      SSDHighPerformance</pre>";

    
    
  document.getElementById("pricinglist").innerHTML =  " <pre><b>Type          Qty          Unit Price          Total Price<br>Controllers    "+numControllers+"            "+ costController+"                 "+(costController*numControllers)
      +"<br>JBODS          "+numJBODS+"            "+ costJBODS+"                 "+(numJBODS*costJBODS)+
      "<br>Data Disks    "+numDataDisks+"            "+ costDataDisks+"                 "+(numDataDisks*costDataDisks)+
      "<br>Zil            "+zil+"            "+ costZil+"                   "+(zil*costZil)+
      "<br>Read Cache     "+readCache+"            "+ costReadCache+"                   "+(readCache*costReadCache)+
      "<br>Zil            "+metaCache+"            "+ costMetaCache+"                  "+(metaCache*costMetaCache)+
      "<br>Sas Cables    "+numberOfSASCables+"            "+ costSASCables+"                 "+(costSASCables*numberOfSASCables)+
      
       "<br><br><br><br><br><br>Total HW Cost (3 yr support cost included)  : "+totalHWCost+
       "<br><br>Support Charge per year from 4th year  : "+supportHW+
      
       "<br><br><br><br><br><br>Total SW Cost  : "+totalSWCost+
       "<br><br>Support Charge per year from 2nd year  : "+supportSW+
      
      
       "<br><br><br><br><br><br>Total Cost for 3 years   : "+totalCost3+
       "<br><br>Total Cost for 5 years   : "+totalCost5+
      
       "<br><br><br><br><br><br>Cost Per GB PM for 3year   : "+costPerGBPerMonth3+
       "<br><br>Cost Per GB PM for 5year   : "+costPerGBPerMonth5+
      
      "</pre>";

  

   
    

                                                                                                                       

</script>

        
    </div>



    <div id="menu3" class="tab-pane fade">
      <h3>List of formulae</h3>
        
                <div class="alert alert-success">
                  <strong>Input Paramters</strong> <br><br>
                  Customer Info= {Customer Name, Contact, Delivery Address, Description, Usable Capcity, 
                    Tier};
                    
                <br><br>
                Quantity of: 
                    <br>
                   <ol>
                     <li>Controllers</li><br>
                     <li>JBODS</li><br>
                       <li>Data Disks</li><br>
                       <li>Zil</li><br>
                       <li>Read Cache</li><br>
                       <li>Meta Cache</li><br>
                       <li>SAS Cables</li><br>

                   </ol>
                </div>
                <div class="alert alert-info">
                 
                 <strong>Calculation of Hardware cost</strong> <br><br>
                 
                   <ol>
                     <li>Total HW Cost ( 3 years support included)=Cost of controllers + JBODS + Zil+ Read Cache + Meta Cache + SAS Cables</li><br><br>
                       <li>Support Charge per year from 4th year= 15 % * Total HW Cost  </li>
                     


                   </ol>


                </div>
                <br>
                
                <div class="alert alert-danger">
                  
                  <strong>Calculation of Software cost</strong> <br><br>
                 
                   <ol>
                     <li>Total SW Cost = Usable Capacity(TB) * Price per TB</li><br><br>
                       <li>Support Charge per year from 2nd year= 15 % * Total SW Cost  </li>
                     


                   </ol>



                </div>


                <div class="alert alert-info">
                 
                 <strong>Calculation of total cost</strong> <br><br>
                 
                   <ol>
                     <li>Total Cost for 3 years = Total HW cost+ Total SW Cost + (15 % * Total SW Cost )*2 </li><br><br>
                     <li>Total Cost for 5 years = Total HW cost+ (15 % * Total HW Cost )*2 + Total SW Cost + (15 % * Total SW Cost )*4 </li><br><br>
                    
                     <li>Cost per GB per month for 3 years= Total Cost for 3 years/(Usable Capcity(TB) * 1000* 36)</li><br><br>
                       
                        <li>Cost per GB per month for 5 years= Total Cost for 5 years/(Usable Capcity(TB) * 1000* 60</li><br><br>
                     


                   </ol>


                </div>
        
        
        <div class="alert alert-success">
                  
                </div>
        
        


             

    </div>
  



</div>

</body>
<!--Created by Deepak Jayaprakash -->
</html>
