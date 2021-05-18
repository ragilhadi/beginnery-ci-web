<?php namespace App\Models;
use CodeIgniter\Model;
 
class ModelsBlog extends Model
{
    protected $table = 'artikel';
     
    public function getArtikel()
    {
        return $this->findAll();  
    }
    public function SimpanBlog($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
    public function PilihBlog($id)
    {
         $query = $this->getWhere(['id' => $id]);
         return $query;
    }
    public function edit_data($id,$data)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }
    public function HapusBlog($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
 }
