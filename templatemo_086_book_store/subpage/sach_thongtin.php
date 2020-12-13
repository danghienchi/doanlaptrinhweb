<?php
$masach = $_GET['masach'];
$tam = $obj->query("select * from sach where masach = '$masach' ");
$data = $tam->fetchAll();
foreach ($data as $key => $value)
{
?>
<div class="templatemo_product_newbook">
    <h1><?php echo $value ['tensach'] ?></h1>
    <img src="images/<?php echo $value['hinh']?>" alt="image" />
    <div class="product_info">
        <p><?php echo $value['mota']?></p>
        <h3>
        <?php echo number_format($value['gia']) ?> VNĐ
        </h3>
       <div class="buy_now_button"><a href="quanly_giohang.php?action=them&masach=<?php echo $value['masach']?>">Đặt Sách</a></div>
    
    </div>
    <div class="cleaner">&nbsp;</div>
</div>
<?php
}
?>
