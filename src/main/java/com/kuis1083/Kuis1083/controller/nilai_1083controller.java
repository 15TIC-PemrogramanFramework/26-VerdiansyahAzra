/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.kuis1083.Kuis1083.controller;

import com.kuis1083.Kuis1083.entity.nilai_1083;
import com.kuis1083.Kuis1083.service.nilai_1083service;
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
@RequestMapping("/nilai_1083")
public class nilai_1083controller {
    
    @Autowired
    private nilai_1083service nilai_1083service;

    @RequestMapping(method = RequestMethod.POST)
    public nilai_1083 insert(@RequestBody nilai_1083 nilai_1083) {
        return nilai_1083service.insert(nilai_1083);
    }

    @RequestMapping(method = RequestMethod.PUT)
    public nilai_1083 update(@RequestBody nilai_1083 nilai_1083) {
        return nilai_1083service.update(nilai_1083);
    }

    @RequestMapping(method = RequestMethod.DELETE, value = "/{id}")
    public boolean delete(@PathVariable("id") Long id) {
        return nilai_1083service.delete(id);
    }
    
    @RequestMapping(method = RequestMethod.GET, value = "/{id}")
    public nilai_1083 getById(@PathVariable("id") Long id){
        return nilai_1083service.getById(id);
    }
    
    @RequestMapping(method = RequestMethod.GET)
    public List<nilai_1083> getAll(){
        return nilai_1083service.getAll();
    }   
}
