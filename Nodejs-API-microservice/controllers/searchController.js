var express=require('express');
var router=express.Router();
var searchModel=require('../models/searchForUser');

router.get('/:userId/:searchString',function (req,res) {
   console.log(req.params);
    var search={
       userId:req.params.userId,
       str:req.params.searchString
   };
   console.log(search);
   searchModel.get(search,function (results) {
       console.log(results);
       res.json(results);
   });
});


module.exports=router;
