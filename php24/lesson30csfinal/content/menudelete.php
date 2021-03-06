<?php
/**
 * menudelete.php
 *
 * Delete the Menu items 
 *
 * @version    1.2 2011-02-03
 * @package    Smithside Auctions
 * @copyright  Copyright (c) 2011 Smithside Auctions
 * @license    GNU General Public License
 * @since      Since Release 1.0
 */
$accessLevel = Contact::accessLevel();
if ($accessLevel != 'Admin') :
  echo 'Sorry, no access allowed to this page';
else :

$id = (int) $_GET['id'];
// Get the existing information for an existing item
$item = Menu::getMenu($id);

?>
<h1>Menu Delete</h1>

<form action="index.php?content=menus" method="post" name="maint" id="maint">

  <fieldset class="maintform">
    <legend><?php echo 'Id: '. $id ?></legend>
    <ul>
      <li><strong>Title:</strong>
        <?php echo htmlspecialchars($item->getTitle()); ?></li>
      <li><strong>Link:</strong> 
        <?php echo htmlspecialchars($item->getLink()); ?></li>
    </ul>

    <?php 
    // create token
    $salt = 'SomeSalt';
    $token = sha1(mt_rand(1,1000000) . $salt); 
    $_SESSION['token'] = $token;
    ?>
    <input type="hidden" name="id" id="id" value="<?php echo $item->getId(); ?>" />
    <input type="hidden" name="task" id="task" value="menu.delete" />
    <input type='hidden' name='token' value='<?php echo $token; ?>'/>
    <input type="submit" name="delete" value="Delete" />
    <a class="cancel" href="index.php?content=menus">Cancel</a>
  </fieldset>
</form>
<?php endif; 