/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.kuis1083.Kuis1083.entity;

import java.io.Serializable;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToMany;
import javax.persistence.Table;

/**
 *
 * @author Mahasiswa 2
 */
@Entity
@Table(name = "nilai_1083")
public class nilai_1083 implements Serializable {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    @Column(length = 150, nullable = false)
    private String nama;
    @Column(length = 255, nullable = true)
    private String nilai;
    @OneToMany
    private nilai_1083 nilai_1083;
    

    /**
     * @return the nilai
     */
    public String getNilai() {
        return nilai;
    }

    /**
     * @param nilai the nilai to set
     */
    public void setNilai(String nilai) {
        this.nilai = nilai;
    }

    /**
     * @return the nilai_1083
     */
    public nilai_1083 getNilai_1083() {
        return nilai_1083;
    }

    /**
     * @param nilai_1083 the nilai_1083 to set
     */
    public void setNilai_1083(nilai_1083 nilai_1083) {
        this.nilai_1083 = nilai_1083;
    }
}
