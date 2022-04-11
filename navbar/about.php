<?php
include("../signin/navigation2.php");
?>
    
<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Aarya Patil</h2>
        <p class="title">Website Manager</p>
      
        <p>aupatil2002@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
      <div class="container">
        <h2>Jyoti vishwakarma</h2>
        <p class="title">Website manager</p>
       
        <p>jyotivishwakar4@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
      <div class="container">
        <h2>abc</h2>
        <p class="title">Designer</p>
        
        <p>abc@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

html {
  box-sizing: border-box;
}



.column {
  float: left;
  width: 33%;
  margin-bottom: 16px;

}



.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;

}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 30%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 100px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>