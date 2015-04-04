<?php
class Vote {
        private $_host        = 'localhost';
        private $_database    = 'blog';
        private $_dbUser      = 'farabi';
        private $_dbPwd       = 'farabi';            
        private $_con         = false;
        private $_optionTable = 'options';
        private $_voterTable  = 'voters';
         
        /**
         * Constructor
         */
        public function __construct()
        {
            if(!$this->_con)
            {
                $this->_con = mysql_connect($this->_host,$this->_dbUser,$this->_dbPwd);
                if(!$this->_con){
                    die('Could not connect: ' . mysql_error());
                }
                mysql_select_db($this->_database,$this->_con)|| die('Could not select database: ' . mysql_error());
                 
            }
        }
         
        //private functions
        private function  _query($sql)
        {
            $result = mysql_query($sql,$this->_con);
            if(!$result){
                die('unable to query'. mysql_error());
            }
            $data= array();
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                $data[]=$row;            
            }
            return $data;
        }
         
        private function _alreadyVote($ip)
        {
            $sql    = 'SELECT * FROM '.$this->_voterTable.' WHERE ip="'.$ip.'"';
            $result = $this->_query($sql);
            return sizeof($result)>0;
        }
         
        //public functions
        public function vote($optionId)
        {          
            $ip  = $_SERVER['REMOTE_ADDR'];
                //if(!$this->_alreadyVote($ip))
				if(true){
                $sql ='INSERT INTO '.$this->_voterTable.' (id,option_id,ip) '.' VALUES(NULL,"'.mysql_real_escape_string($optionId).'","'.mysql_real_escape_string($ip).'")';
                 
                $result = mysql_query($sql,$this->_con);
                if(!$result){
                    die('unable to insert'. mysql_error());
                }
			
            }       
        }
         
        public function getList()
        {
            $sql    = 'SELECT * FROM '.$this->_optionTable;
            return  $this->_query($sql);           
        }
         
        public function showResults()
        {
            $sql =
            'SELECT * FROM  '.$this->_optionTable.' LEFT JOIN '.'(SELECT option_id, COUNT(*) as number FROM  '.$this->_voterTable.' GROUP BY option_id) as votes'.
            ' ON '.$this->_optionTable.'.id = votes.option_id';
            return  $this->_query($sql);
        }
         
        public function getTotal()
        {
            $sql    = 'SELECT count(*)as total FROM '.$this->_voterTable;
            return  $this->_query($sql);
        }
}
?>