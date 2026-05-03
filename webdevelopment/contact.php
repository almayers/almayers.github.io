<?php include 'header.php'; ?>

<main>

<section class="contact-container">

<h1>Contact Me</h1>

<form>

<div class="form-group">
<label for="title">Title</label>
<select id="title" name="title" required>
<option value="">Select</option>
<option>Mr.</option>
<option>Ms.</option>
<option>Mrs.</option>
<option>Dr.</option>
</select>
</div>

<div class="form-group">
<label for="name">Full Name</label>
<input type="text" id="name" name="name" required>
</div>

<div class="form-group">
<label for="email">Email Address</label>
<input type="email" id="email" name="email" required>
</div>

<div class="form-group">
<label for="topic">Reason for Contact</label>
<select id="topic" name="topic" required>
<option value="">Select</option>
<option>Question</option>
<option>Feedback</option>
<option>Help</option>
</select>
</div>

<div class="form-group">
<label for="message">Message</label>
<textarea id="message" name="message" required></textarea>
</div>

<button type="submit">Send Message</button>

</form>

</section>

</main>

<?php include 'footer.php'; ?>
