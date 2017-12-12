/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.kuis1083.Kuis1083.controller;

import com.kuis1083.Kuis1083.entity.cv_1083;
import com.kuis1083.Kuis1083.service.cv_1083service;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

/**
 *
 * @author Mahasiswa 2
 */
@RestController
@RequestMapping("/cv_1083")
public class cv_1083controller {
 
    @Autowired
    private cv_1083service cv_1083service;

    @RequestMapping(method = RequestMethod.POST)
    public cv_1083 insert(@RequestBody cv_1083 cv_1083) {
        return cv_1083service.insert(cv_1083);
    }

    @RequestMapping(method = RequestMethod.PUT)
    public cv_1083 update(@RequestBody cv_1083 cv_1083) {
        return cv_1083service.update(cv_1083);
    }

    @RequestMapping(method = RequestMethod.DELETE, value = "/{id}")
    public boolean delete(@PathVariable("id") Long id) {
        return cv_1083service.delete(id);
    }
    
    @RequestMapping(method = RequestMethod.GET, value = "/{id}")
    public cv_1083 getById(@PathVariable("id") Long id){
        return cv_1083service.getById(id);
    }
    
    @RequestMapping(method = RequestMethod.GET)
    public List<cv_1083> getAll(){
        return cv_1083service.getAll();
    }      
}
