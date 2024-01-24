<!-- Button to open the modal login form -->
<button onclick="document.getElementById('id01').style.display='block'">Login</button>
<link rel="stylesheet" href="<?php echo e(asset('scss/app.scss')); ?>">

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="bg-white shadow-md hover:shadow-xl rounded-lg w-1/2 p-4 mt-10 flex justify-around flex-wrap items-center" method="POST" action="/login">
    <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <input name='password' placeholder="Password" class="w-full border-2 focus:shadow-md rounded-lg p-4 mt-6"/>

      <button type="submit">Login</button>
        <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div><?php /**PATH D:\demo-cms\resources\views/welcome.blade.php ENDPATH**/ ?>