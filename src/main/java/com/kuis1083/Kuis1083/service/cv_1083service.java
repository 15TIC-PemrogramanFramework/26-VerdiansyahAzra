/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.kuis1083.Kuis1083.service;

import com.kuis1083.Kuis1083.entity.cv_1083;
import com.kuis1083.Kuis1083.repo.cv_1083repo;
import java.util.List;
import javax.transaction.Transactional;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

/**
 *
 * @author Mahasiswa 2
 */
@Service("cv_1083")
@Transactional
public class cv_1083service {
    
    @Autowired
    private cv_1083repo repo;

    public cv_1083 insert(cv_1083 cv_1083) {
        return repo.save(cv_1083);
    }
    
    public cv_1083 update(cv_1083 cv_1083) {
        return repo.save(cv_1083);
    }
    
    public boolean delete(Long id){
        repo.delete(id);
        return true;
    }
    
    public cv_1083 getById(Long id){
        return repo.findOne(id);
    }
    
    public List<cv_1083> getAll(){
        return repo.findAllcv_1083();
    }
    
}
