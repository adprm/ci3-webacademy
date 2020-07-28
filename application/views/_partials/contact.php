<h2>Contact Us</h2>
<hr>
<address>
  <strong><?php echo $about->about_title ?></strong>
  <br><?php echo $contact->contact_add ?>
  <br>
</address>
<address>
  <abbr title="Phone">P:</abbr>
  <?php echo $contact->contact_phone ?>
  <br>
  <abbr title="Email">E:</abbr>
  <a href="mailto:#"><?php echo $contact->contact_email ?></a>
</address>