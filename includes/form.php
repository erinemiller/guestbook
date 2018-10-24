<form name="guest" action="addcomment.php" method="post">
    <div class="form-group">
        <input type="text" name="name" placeholder="Name" /></p>
    </div>
    <div class="form-group">
		<p>Last Name: <input type="text" name="lastName" placeholder="Last Name" /></p>
	</div>
    <div class="form-group">
        <input type="text" name="email" placeholder="Email" /></p>
    </div>
    <div class="form-group">
		<p>Phone Number: <input type="tel" name="phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"/></p>
	</div>
     <div class="form-group">
        <textarea name="message" placeholder="Enter message here"></textarea>
    </div>
   

    <button type="submit" class="btn btn-primary"><input type="submit" /></button>
</form>