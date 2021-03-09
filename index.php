    
<div class="graphTitle">
<h1 class="graphTitle">Leave Approval</h1>
</div>

      <div style="display: grid; grid-gap:1em; margin:20px">
        <div style="display: grid; grid-template-columns: auto 1fr">
          <div style="display: grid; grid-template-rows: auto 1fr">
            <div style="display: grid; grid-template-columns: 200px 1fr 1fr">
                    <div >
                        
                        <img src="" style = "width:200px; height:200px" alt="profile pic"> 
                    </div>
                    <div style = "padding:10px">
                        <label style = "display: flex" for="employee Name" id= "EmployeeName"><?= isset($_SESSION['name']) ? isset($_SESSION['name']) : "Matt pl0z name me" ?></label>
                        <label style = "display: flex" for="employee Number" id= "EmployeeNum">Employee Number</label>
                        <label style = "display: flex" for="employment type" id= "EmployeeType">Employeement Type</label>
                        
                     </div>

                     <div>
                         <table  class="generalTable" style="outline: 2px solid ; width:200px ; height:auto; margin-left:20%;margin:20px" id="tbl_coreResults_hours">
                          <thead style="outline: 2px solid ;">
                          <tr>
                              <th  colspan="2" style="outline: 2px solid ;">LEAVE </th>
                          </tr>
                          <tr>
                          <th style="outline: 2px solid ;">Header</th>
                          <th  style="outline: 2px solid ;">Hours</th>
                          </tr>
                          </thead>
                          <tbody id="balhour" style="outline: 2px solid green;">
                          </tbody>
                        </table>
                
                     </div>
                    
                    <div style="display: grid; grid-template-columns:1fr 1fr">
                      <div>
                        <label class="searchLine" for ="ApplicationType">
                        <span style ="color:black">  Application Type</span>
                        <input type="text" name= "ApplicationType" id="ApplicationType" placeholder ="">	
                        </label>
                       
                        <label class="searchLine" for ="start">
                        <span style ="color:black"> Start Date:</span>
                        <input type="text" name= "start" id="start" placeholder ="dd/mm/yy">	
                        </label>

                        <label class="searchLine" for ="End">
                        <span style ="color:black"> End Date:</span>
                        <input type="text" name= "End" id="End" placeholder ="dd/mm/yy">	
                        </label>
                                
                        <label class="searchLine" for ="HoursApplied">
                        <span style ="color:black"> Hours Applied:</span>
                        <input type="text" name= "HoursApplied" id="HoursApplied" placeholder ="">	
                        </label>
                      </div> 
                    
                      <div style="margin:20px">
                        
                        <label class="searchLine " for ="Notes">
                        <span style ="color:black"> Notes:</span>
                        <textarea id="Notes" name="Notes" rows="10" cols="50"	></textarea>
                        </label>
                      </div>
                    </div>
                </div>    
                
                <div style="margin:20px; margin-bottom:10px; margin-left:20%">
                  
                      <label for="checkbox" style="display: flex; margin-bottom:10px ">
                      <input type="checkbox" id="AlertManger" name="AlertManger" value="AlertManger">
                      Alert Project Managers
                      </label>
                      <label for="checkbox" style="display: flex; margin-bottom:10px">
                      <input type="checkbox" id="ReadConfirm" name="ReadConfirm" value="ReadConfirm">
                      I have read and confirmed the error/warnings with this application
                      </label>

                      <span>
                      <button style ="margin-right:20px;" id = "Approve">Approve</button>
                      <button id = "Request">Request Additional</button>
                      <button id = "Reject">Reject</button>
                      </span>
                  
             
                </div>
            
                </div>       
                <div style="display: grid; grid-template-rows: 2fr 1fr; margin:20px">
                    <div><h5>calender</h5></div>
                    <div><h5>Assigned Projects</h5></div>
                </div>
      </div>
    </div>