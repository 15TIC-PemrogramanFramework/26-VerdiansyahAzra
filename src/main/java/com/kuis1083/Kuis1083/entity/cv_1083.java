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
import javax.persistence.Table;

/**
 *
 * @author Mahasiswa 2
 */
@Entity
@Table(name = "cv_1083")
public class cv_1083 implements Serializable {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    @Column(length = 100, nullable = false, unique = true)
    private String nama;
    @Column(length = 255, nullable = true)
    private String asal;
    @Column(length = 255, nullable = true)
    private String umur;
    @Column(length = 255, nullable = true)
    private String email;
    @Column(length = 255, nullable = true)
    private String nohp;
    @Column(length = 255, nullable = true)
    private String pekerjaan;
    
 
    /**
     * @return the id
     */
    public Long getId() {
        return id;
    }

    /**
     * @param id the id to set
     */
    public void setId(Long id) {
        this.id = id;
    }

    /**
     * @return the nama
     */
    public String getNama() {
        return nama;
    }

    /**
     * @param nama the nama to set
     */
    public void setNama(String nama) {
        this.nama = nama;
    }

    /**
     * @return the asal
     */
    public String getAsal() {
        return asal;
    }

    /**
     * @param asal the asal to set
     */
    public void setAsal(String asal) {
        this.asal = asal;
    }

    /**
     * @return the umur
     */
    public String getUmur() {
        return umur;
    }

    /**
     * @param umur the umur to set
     */
    public void setUmur(String umur) {
        this.umur = umur;
    }

    /**
     * @return the email
     */
    public String getEmail() {
        return email;
    }

    /**
     * @param email the email to set
     */
    public void setEmail(String email) {
        this.email = email;
    }

    /**
     * @return the nohp
     */
    public String getNohp() {
        return nohp;
    }

    /**
     * @param nohp the nohp to set
     */
    public void setNohp(String nohp) {
        this.nohp = nohp;
    }

    /**
     * @return the pekerjaan
     */
    public String getPekerjaan() {
        return pekerjaan;
    }

    /**
     * @param pekerjaan the pekerjaan to set
     */
    public void setPekerjaan(String pekerjaan) {
        this.pekerjaan = pekerjaan;
    }
}
