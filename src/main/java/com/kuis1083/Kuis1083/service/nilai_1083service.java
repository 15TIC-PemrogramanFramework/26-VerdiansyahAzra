/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.kuis1083.Kuis1083.service;

import com.kuis1083.Kuis1083.entity.nilai_1083;
import com.kuis1083.Kuis1083.repo.nilai_1083repo;
import java.util.List;
import javax.transaction.Transactional;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

/**
 *
 * @author Mahasiswa 2
 */
@Service("nilai_1083service")
@Transactional
public class nilai_1083service {
    
    @Autowired
    private nilai_1083repo repo;

    public nilai_1083 insert(nilai_1083 nilai_1083) {
        return repo.save(nilai_1083);
    }
    
    public nilai_1083 update(nilai_1083 nilai_1083) {
        return repo.save(nilai_1083);
    }
    
    public boolean delete(Long id){
        repo.delete(id);
        return true;
    }
    
    public nilai_1083 getById(Long id){
        return repo.findOne(id);
    }
    
    public List<nilai_1083> getAll(){
        return repo.findAllnilai_1083();
    }
}
