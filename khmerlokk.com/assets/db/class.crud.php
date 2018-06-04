<?php
require_once('config.php');
class CRUD
{
	private $db;
	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
		
		$this->db = $this->conn;
		
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	
	/*Get Page Menu*/
	public function pages($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>               
               
               <li> 
               <a href="<?php print $row['page_url']; ?>.php"><span class="<?php print $row['page_icon']; ?>"></span> <?php print $row['page_name']; ?></a>            
             </li>

                <?php
			}
		}
		else
		{
			?>
            <h1> No Data</h1>
            <?php
		}
		
	}
	
	

public function getField($query,$field)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				 return $row[$field];
			}
		}
		else
		{
			?>
            <h1> Nothing </h1>
            <?php
		}
		
	}






	
	public function getID($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM tbl_users WHERE id=:id");
		$stmt->execute(array(":id"=>$id));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	
	
	
	/* paging */
	
	public function dataview($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>
                <tr>
                <td><?php print($row['id']); ?></td>
                <td><?php print($row['first_name']); ?></td>
                <td><?php print($row['last_name']); ?></td>
                <td><?php print($row['user_email']); ?></td>
                <td><?php print($row['user_login']); ?></td>
                <td align="center">
                <a href="edit-data.php?edit_id=<?php print($row['id']); ?>"><i class="glyphicon glyphicon-edit"></i></a>
                </td>
                <td align="center">
                <a href="delete.php?delete_id=<?php print($row['id']); ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
                </td>
                </tr>
                <?php
			}
		}
		else
		{
			?>
            <tr>
            <td>Nothing here...</td>
            </tr>
            <?php
		}
		
	}
	
	public function paging($query,$records_per_page)
	{
		$starting_position=0;
		if(isset($_GET["page_no"]))
		{
			$starting_position=($_GET["page_no"]-1)*$records_per_page;
		}
		$query2=$query." limit $starting_position,$records_per_page";
		return $query2;
	}
	
	public function paginglink($query,$records_per_page)
	{
		
		$self = $_SERVER['PHP_SELF'];
		
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		
		$total_no_of_records = $stmt->rowCount();
		
		if($total_no_of_records > 0)
		{
			?><ul class="pagination"><?php
			$total_no_of_pages=ceil($total_no_of_records/$records_per_page);
			$current_page=1;
			if(isset($_GET["page_no"]))
			{
				$current_page=$_GET["page_no"];
			}
			if($current_page!=1)
			{
				$previous =$current_page-1;
				echo "<li><a href='".$self."?page_no=1'>First</a></li>";
				echo "<li><a href='".$self."?page_no=".$previous."'>Previous</a></li>";
			}
			for($i=1;$i<=$total_no_of_pages;$i++)
			{
				if($i==$current_page)
				{
					echo "<li><a href='".$self."?page_no=".$i."' style='color:red;'>".$i."</a></li>";
				}
				else
				{
					echo "<li><a href='".$self."?page_no=".$i."'>".$i."</a></li>";
				}
			}
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<li><a href='".$self."?page_no=".$next."'>Next</a></li>";
				echo "<li><a href='".$self."?page_no=".$total_no_of_pages."'>Last</a></li>";
			}
			?></ul><?php
		}
	}
	
	/* paging */
	
	
	
	
	public function redirect($url)
	{
		header("Location: $url");
	}	

//product_detail
	public function get_product_detail($query)
	{
		$stmt = $this->db->prepare();
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>               
               <h1 class="name"><?php print($row['pro_name']); ?></h1>
                <?php
			}
		}
		else
		{
			?>
            <h1> No Data</h1>
            <?php
		}
		
	}

	
}
