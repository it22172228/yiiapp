<h1>Home Page</h1>
<h2>Home Page description</h2>
<p><?php echo $this->message("this is a message...");?></p>

<ul>
<?php foreach($emails as $email):?>
    <li><?php echo $email;?></li>
<?php endforeach;?>
</ul>