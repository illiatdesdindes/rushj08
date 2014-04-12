<?php
class gsmManager
{
  		private $_db; // Instance de PDO.
 
  		public function __construct($db)
		  {
		    $this->setDb($db);
		  }
 
 	public function add($NouvGsm)
	
		{
		$q = $this->_db->prepare('INSERT INTO annuaire_gsm SET Abrege_annuaire_gsm = :abrege, Label_annuaire_gsm = :label, Num_annuaire_gsm = :num');
		$q->bindValue(':abrege', $NouvGsm->Abrege());
		$q->bindValue(':label', $NouvGsm->Label());
		$q->bindValue(':num', $NouvGsm->Num());
		$q->execute();
		}
		
		 public function update_nom($NouvGsm)
  {
    $q = $this->_db->prepare('UPDATE annuaire_gsm SET  Abrege_annuaire_gsm =?, Label_annuaire_gsm =?, Num_annuaire_gsm =?, Position=? WHERE Id_annuaire_gsm=?');
    $q->execute(array($NouvGsm->Abrege(),$NouvGsm->Label(),$NouvGsm->Num(),$NouvGsm->Position(),$NouvGsm->IdAnnuaireGsm()));
  }

  
   public function del($NouvGsm)
  {
	  
	  
    $q = $this->_db->prepare('DELETE FROM annuaire_gsm WHERE Id_annuaire_gsm = :id_emp');
    $q->bindValue(':id_emp', $NouvGsm->IdAnnuaireGsm());
	$q->execute();
	
	$a = $NouvGsm->IdMere();
	$b = $NouvGsm->Position();
	
	$q2 = $this->_db->exec('UPDATE annuaire_gsm SET Position = Position - 1 WHERE Id_unite_gsm = '.$a.' AND Position > '.$b);
			
  }
  
  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}
?>
