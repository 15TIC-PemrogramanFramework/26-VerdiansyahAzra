/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.kuis1083.Kuis1083.repo;

import com.kuis1083.Kuis1083.entity.nilai_1083;
import java.util.List;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;

/**
 *
 * @author Mahasiswa 2
 */
public interface nilai_1083repo extends CrudRepository <nilai_1083, Long> {
    
    @Query("select c from nilai_1083 c")
    public List<nilai_1083> findAllnilai_1083();
    
}
