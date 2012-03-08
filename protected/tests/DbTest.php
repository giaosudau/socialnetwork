<?php
class DbTest extends CTestCase
{
    public function testConnection(){
            //$this->assertTrue(true);
        $this->assertNotEquals(Null,Yii::app()->db);
    }
}
?>